<?php
/*
"teamID" : {
		"name": "Teams name",
		"logoUrl": "",
		"wins": 0,
		"losses": 0,
		"winPercentage": 0,
		"position": 0,
    },
*/

$id='5b4cf1dc55f57c03debc86f6';

$json = file_get_contents("https://dtmwra1jsgyb0.cloudfront.net/tournaments/$id");
$obj = json_decode($json, true);

$output=array();

foreach($obj['stageIDs'] as $stageId){

    $temp = json_encode($stageId);
    $Estanding = file_get_contents("https://dtmwra1jsgyb0.cloudfront.net/stages/$stageId/standings/"); //position
    $Dstanding = json_decode($Estanding, true);
    $Eteam = file_get_contents("https://dtmwra1jsgyb0.cloudfront.net/tournaments/$id/teams/");
    $Dteam = json_decode($Eteam, true);
    $incerementID=0;

    foreach($Dteam as $teamItem){};

    foreach($Dteam as $teamItem){
        $allPlayers=array();

        foreach($teamItem["players"] as $players){
            $allPlayers[]=array(
                "username" => $players["username"],
                "userNameSlug" => $players["userSlug"],
                "inGameName" => $players["inGameName"],
                "onTeam" => $players["onTeam"],
                "captain" => $players["beCaptain"],
            );
        };

        $output[]=array(
            $teamItem['_id'] => array(
                "incrementID" => $incerementID,
                "teamName" => $teamItem["persistentTeam"]["name"],
                "teamLogoUrl" => $teamItem["persistentTeam"]["logoUrl"],
                "teamRegion" => $teamItem["countryFlag"],
                "captainInfo" => array(
                    "username" => $teamItem["captain"]["username"],
                    "userNameSlug" => $teamItem["captain"]["userSlug"],
                    "inGameName" => $teamItem["captain"]["inGameName"]
                ),
                "players" => $allPlayers
                //"position" => $teamItem["place"]
            )
        );
        $incerementID++;
    };
};

echo json_encode($output);