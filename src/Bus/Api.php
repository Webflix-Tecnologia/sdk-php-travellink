<?php

namespace Travellink\Bus;

class Api extends \Travellink\Core\TravellinkBus {
    private function header($headers = []) {
        $headers = array_merge_recursive([
            'developer-token' => $this->getDeveloperToken(),
            'developer-access-code' => $this->getDeveloperAccesCode(),
        ], $headers);
        return $headers;
    }

    public function busLocations(array $body){
        try{
            $response = $this->http->post(self::BASE_SANDBOX."static/bus", [
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

    public function shopping(array $body){
        try{
            $response = $this->http->post('shopping', [
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

    public function price(array $body){
        try{
            $response = $this->http->post('price', [
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

    public function book(array $body){
        try{
            $response = $this->http->post('book', [
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

    public function bookRetrieve(array $body){
        try{
            $response = $this->http->post('bookRetrieve', [
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

    public function bookCancel(array $body){
        try{
            $response = $this->http->post('bookCancel', [
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