<?php

namespace Travellink\Air;

class Api extends \Travellink\Core\TravellinkAir{
    private function header($headers = []) {
        $headers = array_merge_recursive([
            'developer-token' => $this->getDeveloperToken(),
            'developer-access-code' => $this->getDeveloperAccesCode(),
        ], $headers);
        return $headers;
    }

    public function removerAssentos(array $body){        
        try{
            $response = $this->http->post('RemoverAssentos', [
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
    
    public function marcarAssentos(array $body){        
        try{
            $response = $this->http->post('MarcarAssentos', [
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
    
    public function obterMapaDeAssentos(array $body){        
        try{
            $response = $this->http->post('ObterMapaDeAssentos', [
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
    
    public function cancelarEticket(array $body){        
        try{
            $response = $this->http->post('CancelarEticket', [
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
    
    public function cancelar(array $body){        
        try{
            $response = $this->http->post('Cancelar', [
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
    
    public function consultarEticket(array $body){        
        try{
            $response = $this->http->post('ConsultarEticket', [
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
    
    public function emitir(array $body){        
        try{
            $response = $this->http->post('Emitir', [
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
    
    public function recuperarFormasDeFinanciamento(array $body){        
        try{
            $response = $this->http->post('RecuperarFormasDeFinanciamento', [
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
    
    public function iniciarEmissao(array $body){        
        try{
            $response = $this->http->post('IniciarEmissao', [
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
    
    public function consultar(array $body){        
        try{
            $response = $this->http->post('Consultar', [
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
    
    public function reservar(array $body){        
        try{
            $response = $this->http->post('Reservar', [
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
    
    public function tarifar(array $body){        
        try{
            $response = $this->http->post('Tarifar', [
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
    
    public function detalhesdeFamilia(array $body){        
        try{
            $response = $this->http->post('DetalhesdeFamilia', [
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
    
    public function obterRegraDaTarifa(array $body){        
        try{
            $response = $this->http->post('ObterRegraDaTarifa', [
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
    
    public function disponibilidadeMultipla(array $body){        
        try{
            $response = $this->http->post('DisponibilidadeMultipla', [
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
    
    public function disponibilidade(array $body){        
        try{
            $response = $this->http->post('Disponibilidade', [
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
    
    public function recuperarSistemasPesquisa(array $body){        
        try{
            $response = $this->http->post('RecuperarSistemasPesquisa', [
                'json' => $body,
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

    public function alterarReservaTarifar(array $body){
        try{
            $response = $this->http->post('AlterarReservaTarifar', [
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

    public function AlterarReservaConfirmar(array $body){
        try{
            $response = $this->http->post('AlterarReservaConfirmar', [
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

    public function GravarReserva(array $body){
        try{
            $response = $this->http->post('GravarReserva', [
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

    public function GravarVenda(array $body){
        try{
            $response = $this->http->post('GravarVenda', [
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

    //Outros Serviços Wooba

    public function ListarEtickets(array $body){
        try{
            $response = $this->http->post('ListarEtickets', [
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

    public function ListarNotificacoes(array $body){
        try{
            $response = $this->http->post('ListarNotificacoes', [
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

    public function ListarReservas(array $body){
        try{
            $response = $this->http->post('ListarReservas', [
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

    public function BuscarEtickets(array $body){
        try{
            $response = $this->http->post('BuscarEtickets', [
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

    public function BuscarFila(array $body){
        try{
            $response = $this->http->post('BuscarFila', [
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

    public function BuscarNotificacao(array $body){
        try{
            $response = $this->http->post('BuscarReserva', [
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

    public function BuscarReserva(array $body){
        try{
            $response = $this->http->post('Consultar', [
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
