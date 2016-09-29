<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are 
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of 
 * conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its 
 * contributors may be used to endorse or promote products derived from this software 
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT 
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; 
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING 
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF 
 * SUCH DAMAGE.
 *
 */

namespace MasterCard\Api\AssuranceIq;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;
use Test\BaseTest;



class ECommerceMessageScoreTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
                

        public function test_example_score_event()
        {
            

            

            $map = new RequestMap();
            $map->set ("ECommerceMessage.ServiceRequest.EventType", "Purchase");
            $map->set ("ECommerceMessage.ServiceRequest.SenderMsgRef", "4j3f8944");
            $map->set ("ECommerceMessage.ServiceRequest.ServiceMethod", "ScoringRequest");
            $map->set ("ECommerceMessage.ServiceRequest.UserAccountId", "siHZ27CDp/M0KNfCo8MZiuklYU1wIQ4ocWzKp81N23k=");
            $map->set ("ECommerceMessage.ServiceRequest.AppMsgType", "AppMsgType");
            $map->set ("ECommerceMessage.ServiceRequest.PAN", "1234567890123456789");
            $map->set ("ECommerceMessage.ServiceRequest.ExpirationDate", "1015");
            $map->set ("ECommerceMessage.ServiceRequest.TransactionDateTime", "2012-01-02 23:59:59.123");
            $map->set ("ECommerceMessage.ServiceRequest.IPAddress", "siHZ27CDp/M0KNfCo8MZiuklYU1wIQ4ocWzKp81N23k=");
            $map->set ("ECommerceMessage.ServiceRequest.Email", "siHZ27CDp/M0KNfCo8MZiuklYU1wIQ4ocWzKp81N23k=");
            $map->set ("ECommerceMessage.ServiceRequest.Telephone1", "siHZ27CDp/M0KNfCo8MZiuklYU1wIQ4ocWzKp81N23k=");
            $map->set ("ECommerceMessage.ServiceRequest.Telephone2", "siHZ27CDp/M0KNfCo8MZiuklYU1wIQ4ocWzKp81N23k=");
            $map->set ("ECommerceMessage.ServiceRequest.Telephone3", "siHZ27CDp/M0KNfCo8MZiuklYU1wIQ4ocWzKp81N23k=");
            $map->set ("ECommerceMessage.ServiceRequest.ShippingAddress1", "siHZ27CDp/M0KNfCo8MZiuklYU1wIQ4ocWzKp81N23k=");
            $map->set ("ECommerceMessage.ServiceRequest.ShippingAddress2", "ShippingAddress2");
            $map->set ("ECommerceMessage.ServiceRequest.ShippingAddress3", "ShippingAddress3");
            $map->set ("ECommerceMessage.ServiceRequest.ShippingCity", "ShippingCity");
            $map->set ("ECommerceMessage.ServiceRequest.ShippingState", "ShippingState");
            $map->set ("ECommerceMessage.ServiceRequest.ShippingCountry", "ShippingCountry");
            $map->set ("ECommerceMessage.ServiceRequest.ShippingPostalCode", "siHZ27CDp/M0KNfCo8MZiuklYU1wIQ4ocWzKp81N23k=");
            $map->set ("ECommerceMessage.ServiceRequest.BillingAddress1", "siHZ27CDp/M0KNfCo8MZiuklYU1wIQ4ocWzKp81N23k=");
            $map->set ("ECommerceMessage.ServiceRequest.BillingAddress2", "BillingAddress2");
            $map->set ("ECommerceMessage.ServiceRequest.BillingAddress3", "BillingAddress3");
            $map->set ("ECommerceMessage.ServiceRequest.BillingCity", "BillingCity");
            $map->set ("ECommerceMessage.ServiceRequest.BillingState", "BillingState");
            $map->set ("ECommerceMessage.ServiceRequest.BillingCountry", "BillingCountry");
            $map->set ("ECommerceMessage.ServiceRequest.BillingPostalCode", "siHZ27CDp/M0KNfCo8MZiuklYU1wIQ4ocWzKp81N23k=");
            $map->set ("ECommerceMessage.ServiceRequest.DeviceCollection", "SUCCESS_Good_899_AA_BB");
            $map->set ("ECommerceMessage.ServiceRequest.HttpHeaders", "{'content-type': 'application/x-www-form-urlencoded', 'connection': 'keep-alive','content-length': '1618','accept-encoding': 'gzip,deflate,sdch'}");
            $map->set ("ECommerceMessage.ServiceRequest.TelephoneCountryCode", "1");
            $map->set ("ECommerceMessage.ServiceRequest.TelephoneAreaCode", "555");
            $map->set ("ECommerceMessage.ServiceRequest.IPPrefix", "10.100");
            $map->set ("ECommerceMessage.ServiceRequest.PostalCodePrefix", "620");
            $map->set ("ECommerceMessage.ServiceRequest.SenderConfidence", "Trusted");
            $map->set ("ECommerceMessage.ServiceRequest.LoginAuthenticationMethod", "Merchant - Trusted");
            $map->set ("ECommerceMessage.ServiceRequest.CardVerificationStatus", "Chip Secured");
            $map->set ("ECommerceMessage.ServiceRequest.WalletDistributorIsIssuer", "Y");
            $map->set ("ECommerceMessage.ServiceRequest.TxnAmount", "125.23");
            $map->set ("ECommerceMessage.ServiceRequest.TxnCurrCode", "123");
            $map->set ("ECommerceMessage.ServiceRequest.MerchantName", "MerchantName");
            $map->set ("ECommerceMessage.ServiceRequest.AcquirerId", "123545");
            $map->set ("ECommerceMessage.ServiceRequest.MerchantId", "123456555");
            $map->set ("ECommerceMessage.ServiceRequest.MCC", "1234");
            
            
            $request = new ECommerceMessageScore($map);
            $response = $request->update();

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "EventScoreResponse.ServiceRequest.SenderMsgRef", "4j3f8944");
            $this->customAssertEqual($ignoreAssert, $response, "EventScoreResponse.ServiceResponse.Status", "Success");
            $this->customAssertEqual($ignoreAssert, $response, "EventScoreResponse.ServiceResponse.Decision", "Good");
            $this->customAssertEqual($ignoreAssert, $response, "EventScoreResponse.ServiceResponse.Score", "899");
            $this->customAssertEqual($ignoreAssert, $response, "EventScoreResponse.ServiceResponse.ReasonCode1", "AA");
            $this->customAssertEqual($ignoreAssert, $response, "EventScoreResponse.ServiceResponse.ReasonCode2", "BB");
            

            self::putResponse("example_score_event", $response);
            
        }
        
    
    
    
    
    
    
}



