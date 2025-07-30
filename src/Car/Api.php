<?php

namespace Travellink\Car;

class Api extends \Travellink\Core\TravellinkCar {
    private function header($headers = []) {
        $headers = array_merge_recursive([
            'developer-token' => $this->getDeveloperToken(),
            'developer-access-code' => $this->getDeveloperAccesCode(),
        ], $headers);
        return $headers;
    }

    public function carShopping(array $body) {
        try{
            $response = $this->http->post("shopping", [
                "json" => $body,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
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

    public function carDetails(array $body) {
        try{
            $response = $this->http->post("details", [
                "json" => $body,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
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

    public function carBook(array $body) {
        try{
            $response = $this->http->post("book", [
                "json" => $body,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
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

    public function carBookRetrieve(array $body) {
        try{
            $response = $this->http->post("bookRetrieve", [
                "json" => $body,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
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

    public function carBookCancel(array $body) {
        try{
            $response = $this->http->post("bookCancel", [
                "json" => $body,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
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