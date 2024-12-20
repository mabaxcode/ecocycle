<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'vendor/autoload.php';


use Mpdf\Mpdf;

class PdfController extends CI_Controller {

    public function generate_certificate($id) {

        $joined_event = get_any_table_row(array('id' => $id), 'joined_event');

        $user = get_any_table_row(array('id' => $joined_event['user_id']), 'users');

        $event = get_any_table_row(array('id' => $joined_event['event_id']), 'event');

        $name = $user['name'];

        // Certificate content
        $data['title'] = 'Certificate of Participation';
        $data['name'] = strtoupper($user['name']);
        $data['date'] = date('F j, Y', strtotime($event['event_dt']));

        $data['event_name'] = $event['name'];

        // Load certificate template as HTML
        $html = $this->load->view('pdf/cert', $data, true);

        // mPDF configuration
       $config = [
            'format' => 'A4',
            'orientation' => 'L',  // Landscape orientation
            'margin_left' => 15,
            'margin_right' => 15,
            'margin_top' => 60,
            'margin_bottom' => 30,
        ];
        $mpdf = new Mpdf($config);
        $mpdf = new Mpdf($config);

        // Set the background image
        $background_image = base_url('assets/cert/cert-back.png'); // Replace with your image path
        $mpdf->SetHTMLFooter('<div style="position:fixed;top:0;left:0;width:100%;height:100%;background:url(' . $background_image . ') no-repeat center center; background-size: cover;"></div>');

        // Write HTML to PDF
        $mpdf->WriteHTML($html);

        // Output the certificate PDF
        $mpdf->Output('Certificate.pdf', 'I');
    }
}
