<?php

class PaymentModel extends CI_Model
{
    public function get_existing_payment_model($service_id)
    {
        $this->db->select('pd_rsd_id');
        $this->db->from('payment_data');
        $this->db->where('pd_rsd_id', decrypt_it($service_id));
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function add_transaction_model($paypal_return)
    {
        $data = array(
            'pd_cd_id' => decrypt_it($paypal_return["custom"]),
            'pd_rsd_id' => decrypt_it($paypal_return["item_number"]),
            'pd_txn_id' => $paypal_return["txn_id"],
            'pd_payment_gross' => $paypal_return["mc_gross"],
            'pd_currency_code' => $paypal_return["mc_currency"],
            'pd_payer_name' => trim($paypal_return["first_name"] . ' ' . $paypal_return["last_name"]),
            'pd_payer_email' => $paypal_return["payer_email"],
            'pd_status' => $paypal_return["payment_status"],
            'pd_log' => date('h:m:s Y-m-d')
        );

        return $this->db->insert('payment_data', $data);
    }

    public function add_tracking_model($pickup_time, $pickup_date, $request_id)
    {
        $data = array(
            'td_cd_id' => decrypt_it($this->session->userdata('customerid')),
            'td_rsd_id' =>  decrypt_it($request_id),
            'td_pickup_date' => $pickup_date,
            'td_pickup_time' => $pickup_time,
            'td_status' => 'Paid',
            'td_log' => date('h:m:s Y-m-d')
        );

        return $this->db->insert('track_data', $data);
    }

    public function set_request_ongoing_model($request_id)
    {
        $data = array(
            'rsd_progress' => 1,
            'rsd_comment' => 'Repairing',
            'rsd_log' => date('h:m:s Y-m-d')
        );

        $this->db->where('rsd_id', decrypt_it($request_id));
        return $this->db->update('repair_service_data', $data);
    }
}
