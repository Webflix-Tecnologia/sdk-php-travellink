<?php

namespace Travellink\Air;

class Api extends \Travellink\Core\TravellinkAir{

    public function removerAssentos(array $body){        
        try{
            $response = $this->http->post('RemoverAssentos', [
                "json" => $body,
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
    
    public function marcarAssentos(array $body){        
        try{
            $response = $this->http->post('MarcarAssentos', [
                "json" => $body,
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
    
    public function obterMapaDeAssentos(array $body){        
        try{
            $response = $this->http->post('ObterMapaDeAssentos', [
                "json" => $body,
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
    
    public function cancelarEticket(array $body){        
        try{
            $response = $this->http->post('CancelarEticket', [
                "json" => $body,
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
    
    public function cancelar(array $body){        
        try{
            $response = $this->http->post('Cancelar', [
                "json" => $body,
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
    
    public function consultarEticket(array $body){        
        try{
            $response = $this->http->post('ConsultarEticket', [
                "json" => $body,
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
    
    public function emitir(array $body){        
        try{
            $response = $this->http->post('Emitir', [
                "json" => $body,
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
    
    public function recuperarFormasDeFinanciamento(array $body){        
        try{
            $response = $this->http->post('RecuperarFormasDeFinanciamento', [
                "json" => $body,
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
    
    public function iniciarEmissao(array $body){        
        try{
            $response = $this->http->post('IniciarEmissao', [
                "json" => $body,
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
    
    public function consultar(array $body){        
        try{
            $response = $this->http->post('Consultar', [
                "json" => $body,
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
    
    public function reservar(array $body){        
        try{
            $response = $this->http->post('Reservar', [
                "json" => $body,
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
    
    public function tarifar(array $body){        
        try{
            $response = $this->http->post('Tarifar', [
                "json" => $body,
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
    
    public function detalhesdeFamilia(array $body){        
        try{
            $response = $this->http->post('DetalhesdeFamilia', [
                "json" => $body,
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
    
    public function obterRegraDaTarifa(array $body){        
        try{
            $response = $this->http->post('ObterRegraDaTarifa', [
                "json" => $body,
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
    
    public function disponibilidadeMultipla(array $body){        
        try{
            $response = $this->http->post('DisponibilidadeMultipla', [
                "json" => $body,
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
    
    public function disponibilidade(array $body){        
        try{
            $response = $this->http->post('Disponibilidade', [
                "json" => $body,
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
    
    public function recuperarSistemasPesquisa(array $body){        
        try{
            $response = $this->http->post('RecuperarSistemasPesquisa', [
                'json' => $body,
                'headers' => [
                    'developer-token' => $this->getDeveloperToken(),
                    'developer-access-code' => $this->getDeveloperAccesCode(),
                ]
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
