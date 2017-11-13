<?php
class BasicTmsVeriPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.basic.tms.veri.push";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $FlightNo;
                              public function setFlightNo($FlightNo ){
                 $this->FlightNo=$FlightNo;
                 $this->apiParas["FlightNo"] = $FlightNo;
              }

              public function getFlightNo(){
              	return $this->FlightNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightCompany;
                              public function setFlightCompany($FlightCompany ){
                 $this->FlightCompany=$FlightCompany;
                 $this->apiParas["FlightCompany"] = $FlightCompany;
              }

              public function getFlightCompany(){
              	return $this->FlightCompany;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightDepcode;
                              public function setFlightDepcode($FlightDepcode ){
                 $this->FlightDepcode=$FlightDepcode;
                 $this->apiParas["FlightDepcode"] = $FlightDepcode;
              }

              public function getFlightDepcode(){
              	return $this->FlightDepcode;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightArrcode;
                              public function setFlightArrcode($FlightArrcode ){
                 $this->FlightArrcode=$FlightArrcode;
                 $this->apiParas["FlightArrcode"] = $FlightArrcode;
              }

              public function getFlightArrcode(){
              	return $this->FlightArrcode;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightDeptimePlanDate;
                              public function setFlightDeptimePlanDate($FlightDeptimePlanDate ){
                 $this->FlightDeptimePlanDate=$FlightDeptimePlanDate;
                 $this->apiParas["FlightDeptimePlanDate"] = $FlightDeptimePlanDate;
              }

              public function getFlightDeptimePlanDate(){
              	return $this->FlightDeptimePlanDate;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightArrtimePlanDate;
                              public function setFlightArrtimePlanDate($FlightArrtimePlanDate ){
                 $this->FlightArrtimePlanDate=$FlightArrtimePlanDate;
                 $this->apiParas["FlightArrtimePlanDate"] = $FlightArrtimePlanDate;
              }

              public function getFlightArrtimePlanDate(){
              	return $this->FlightArrtimePlanDate;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightDeptimeReadyDate;
                              public function setFlightDeptimeReadyDate($FlightDeptimeReadyDate ){
                 $this->FlightDeptimeReadyDate=$FlightDeptimeReadyDate;
                 $this->apiParas["FlightDeptimeReadyDate"] = $FlightDeptimeReadyDate;
              }

              public function getFlightDeptimeReadyDate(){
              	return $this->FlightDeptimeReadyDate;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightArrtimeReadyDate;
                              public function setFlightArrtimeReadyDate($FlightArrtimeReadyDate ){
                 $this->FlightArrtimeReadyDate=$FlightArrtimeReadyDate;
                 $this->apiParas["FlightArrtimeReadyDate"] = $FlightArrtimeReadyDate;
              }

              public function getFlightArrtimeReadyDate(){
              	return $this->FlightArrtimeReadyDate;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightDeptimeDate;
                              public function setFlightDeptimeDate($FlightDeptimeDate ){
                 $this->FlightDeptimeDate=$FlightDeptimeDate;
                 $this->apiParas["FlightDeptimeDate"] = $FlightDeptimeDate;
              }

              public function getFlightDeptimeDate(){
              	return $this->FlightDeptimeDate;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightArrtimeDate;
                              public function setFlightArrtimeDate($FlightArrtimeDate ){
                 $this->FlightArrtimeDate=$FlightArrtimeDate;
                 $this->apiParas["FlightArrtimeDate"] = $FlightArrtimeDate;
              }

              public function getFlightArrtimeDate(){
              	return $this->FlightArrtimeDate;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightState;
                              public function setFlightState($FlightState ){
                 $this->FlightState=$FlightState;
                 $this->apiParas["FlightState"] = $FlightState;
              }

              public function getFlightState(){
              	return $this->FlightState;
              }
                                                                                                                                                                                                                                                                                                                                              private $ShareFlightNo;
                              public function setShareFlightNo($ShareFlightNo ){
                 $this->ShareFlightNo=$ShareFlightNo;
                 $this->apiParas["ShareFlightNo"] = $ShareFlightNo;
              }

              public function getShareFlightNo(){
              	return $this->ShareFlightNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $StopFlag;
                              public function setStopFlag($StopFlag ){
                 $this->StopFlag=$StopFlag;
                 $this->apiParas["StopFlag"] = $StopFlag;
              }

              public function getStopFlag(){
              	return $this->StopFlag;
              }
                                                                                                                                                                                                                                                                                                                                              private $ShareFlag;
                              public function setShareFlag($ShareFlag ){
                 $this->ShareFlag=$ShareFlag;
                 $this->apiParas["ShareFlag"] = $ShareFlag;
              }

              public function getShareFlag(){
              	return $this->ShareFlag;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightDep;
                              public function setFlightDep($FlightDep ){
                 $this->FlightDep=$FlightDep;
                 $this->apiParas["FlightDep"] = $FlightDep;
              }

              public function getFlightDep(){
              	return $this->FlightDep;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightArr;
                              public function setFlightArr($FlightArr ){
                 $this->FlightArr=$FlightArr;
                 $this->apiParas["FlightArr"] = $FlightArr;
              }

              public function getFlightArr(){
              	return $this->FlightArr;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightDepAirport;
                              public function setFlightDepAirport($FlightDepAirport ){
                 $this->FlightDepAirport=$FlightDepAirport;
                 $this->apiParas["FlightDepAirport"] = $FlightDepAirport;
              }

              public function getFlightDepAirport(){
              	return $this->FlightDepAirport;
              }
                                                                                                                                                                                                                                                                                                                                              private $FlightArrAirport;
                              public function setFlightArrAirport($FlightArrAirport ){
                 $this->FlightArrAirport=$FlightArrAirport;
                 $this->apiParas["FlightArrAirport"] = $FlightArrAirport;
              }

              public function getFlightArrAirport(){
              	return $this->FlightArrAirport;
              }
                                                                                                                                                                                                                                                                                                                                              private $fid;
                              public function setFid($fid ){
                 $this->fid=$fid;
                 $this->apiParas["fid"] = $fid;
              }

              public function getFid(){
              	return $this->fid;
              }
                                                                                                                }





        
 

