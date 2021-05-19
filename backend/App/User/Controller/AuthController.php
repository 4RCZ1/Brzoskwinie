<?php


namespace App\User\Controller;

use App\Helpers\JwtHelper;
use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\User\Model\Token;
use App\User\Model\PlotRequest;
use App\User\Service\AuthService;

/**
 * @Controller(path="/auth")
 */
class AuthController {

    private $authService;

    /**
     * AuthController constructor.
     */
    public function __construct() {
        $this->authService = new AuthService();
    }

    /**
     * @Action(method="POST", path="/login")
     */
    public function loginAction() {
        /** @var PlotRequest $requestBody */
        $requestBody = RestBodyReader::readBody(PlotRequest::class);

        $tokenObject = $this->authService->login($requestBody->getName(), $requestBody->getPasswordHash());

        echo JsonSerializer::getInstance()->serialize($tokenObject, 'json');
    }

    /**
     * @Action(method="POST", path="/token/verify")
     */
    public function tokenVerifyAction() {
        /** @var Token $requestBody */
        $requestBody = RestBodyReader::readBody(Token::class);

        echo JwtHelper::verifyToken($requestBody->getToken());
    }
}