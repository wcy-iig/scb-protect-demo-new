<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropOffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function geyToken()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://login.salesforce.com/services/oauth2/token?grant_type=password&client_id=3MVG9kBt168mda_8J9udsdveviGy2Jmw2UJXNicivKpPoDRTtzmVLsL3hBVW1A7reQl1N9zdxMMEHsyhZU7Xp&client_secret=113FEC8F25DF38E3D50707ABBBE9892E302E0FF766AA999038436615B7F5BAA5&username=moo@jan21rs.demo&password=passw0rd2021',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'Cookie: BrowserId=BEkxA0acEeuMRkvPp9yBmg'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        $array = json_decode($response,true);
        return $array['access_token'];
    }

    public function DropLead($data){
        $curl = curl_init();
        $token = $this->geyToken();
        $token = 'Bearer '.$token;
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://jan21rs-20210113-demo.my.salesforce.com/services/apexrest/wsDroplead/leadProcess',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
   "reqCreateLead":true,
    "LeadFirstName":"ทศพล",
   "LeadLastName":"เกษมสุข"
}',
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$token,
                'Content-Type: application/json',
                'Sforce-Auto-Assign: FALSE',
                'Cookie: BrowserId=BEkxA0acEeuMRkvPp9yBmg'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $array = json_decode($response,true);
        return $array;
    }
    public function leadUpdate($data){
        $token = $this->geyToken();
        $token = 'Bearer '.$token;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://jan21rs-20210113-demo.my.salesforce.com/services/apexrest/wsUpdateLead/leadUpdate',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
    "LeadFirstName":"ทศพล",
    "LeadLastName":"เกษมสุข",
    "isUpdate":true
}',
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$token,
                'Content-Type: application/json',
                'Sforce-Auto-Assign: FALSE',
                'Cookie: BrowserId=BEkxA0acEeuMRkvPp9yBmg'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $array = json_decode($response,true);
        return $array;
    }
    public function DropLead2($data){

        $token = $this->geyToken();
        $token = 'Bearer '.$token;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://jan21rs-20210113-demo.my.salesforce.com/services/apexrest/wsDroplead_2/leadProcess',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
   "reqCreateLead":true,
   "LeadFirstName":"ทศพล",
   "LeadLastName":"เกษมสุข"
}',
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$token,
                'Content-Type: application/json',
                'Sforce-Auto-Assign: FALSE',
                'Cookie: BrowserId=BEkxA0acEeuMRkvPp9yBmg'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $array = json_decode($response,true);
        return $array;
    }
}
