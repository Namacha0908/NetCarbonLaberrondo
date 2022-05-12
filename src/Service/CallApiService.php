<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;



class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getInfoCompany(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/company'
        );

        return $response->toArray();
    }

    public function getLatestLaunch(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v5/launches/latest'
        );

        return $response->toArray();
    }

    public function getAllLaunches(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v5/launches'
        );

        return $response->toArray();
    }

    public function getLaunchData($id): array
    {
        // return $this->getApi('launches/' . $id);
        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v5/launches/' . $id
        );

        return $response->toArray();
    }


    public function getAllCapsules(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/capsules'
        );

        return $response->toArray();
    }
    public function getCapsuleData($id): array
    {

        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/capsules/' . $id
        );

        return $response->toArray();
    }
    public function getAllCrew(): array
    {

        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/crew'
        );

        return $response->toArray();
    }
    public function getCrewMember($id): array
    {

        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/crew/' . $id
        );

        return $response->toArray();
    }


    public function getAllLandpads(): array
    {

        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/landpads'
        );

        return $response->toArray();
    }
    public function getOneLandpad($id): array
    {

        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/landpads/' . $id
        );

        return $response->toArray();
    }
    public function getAllRockets(): array
    {

        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/rockets'
        );

        return $response->toArray();
    }
    public function getOneRocket($id): array
    {

        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/rockets/' . $id
        );

        return $response->toArray();
    }
    public function getAllLaunchpads(): array
    {

        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/launchpads'
        );

        return $response->toArray();
    }
    public function getOneLaunchpad($id): array
    {

        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/launchpads/' . $id
        );

        return $response->toArray();
    }
    public function getAllShips(): array
    {

        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/ships/'
        );

        return $response->toArray();
    }
    public function getOneShip($id): array
    {

        $response = $this->client->request(
            'GET',
            'https://api.spacexdata.com/v4/ships/' . $id
        );

        return $response->toArray();
    }
}
