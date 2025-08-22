<?php

namespace Travellink\Sale;

class Api extends \Travellink\Core\TravellinkSale {
    private function header($headers = []) {
        $headers = array_merge_recursive([
            'developer-token' => $this->getDeveloperToken(),
            'developer-access-code' => $this->getDeveloperAccesCode(),
        ], $headers);
        return $headers;
    }

    public function details(array $body){
        try{
            $response = $this->http->post('details', [
                "json" => $body,
                'headers' => $this->header(),
            ]);

            $responseData = (string)$response->getBody();

            return json_decode($responseData);

        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \Travellink\Exceptions\TravellinkException($ex);
        }
    }

    public function list(array $body){
        try{
            $response = $this->http->post('list', [
                "json" => $body,
                'headers' => $this->header(),
            ]);

            $responseData = (string)$response->getBody();

            return json_decode($responseData);

        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \Travellink\Exceptions\TravellinkException($ex);
        }
    }

    public function change(array $body){
        try{
            $response = $this->http->post('change', [
                "json" => $body,
                'headers' => $this->header(),
            ]);

            $responseData = (string)$response->getBody();

            return json_decode($responseData);

        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \Travellink\Exceptions\TravellinkException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \Travellink\Exceptions\TravellinkException($ex);
        }
    }
}