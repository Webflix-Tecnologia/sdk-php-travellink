<?php

namespace Travellink\Hotel;

class Api extends \Travellink\Core\TravellinkHotel {
    private function header($headers = []) {
        $headers = array_merge_recursive([
            'developer-token' => $this->getDeveloperToken(),
            'developer-access-code' => $this->getDeveloperAccesCode(),
        ], $headers);
        return $headers;
    }

    public function destinations(array $body) {
        try{
            $response = $this->http->post("static/destinations", [
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

    public function avail(array $body) {
        try{
            $response = $this->http->post("hotels/avail", [
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

    public function descriptiveInfo(array $body) {
        try{
            $response = $this->http->post("hotels/descriptiveinfo", [
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

    public function res(array $body) {
        try{
            $response = $this->http->post("hotels/res", [
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

    public function read(array $body) {
        try{
            $response = $this->http->post("hotels/read", [
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

    public function cancel(array $body) {
        try{
            $response = $this->http->delete("hotels/cancel", [
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