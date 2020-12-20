<?php  

$json = file_get_contents('https://dtmwra1jsgyb0.cloudfront.net/tournaments/5b4cf1dc55f57c03debc86f6');
$obj = json_decode($json, true);

$myarray= array(
    "basicInfo" => array(
        "name" => $obj['name'],
        "slug" => $obj['slug'],
        "region" => $obj['region'],
        "platform" => $obj['platform'],
        "joinFee" => $obj['serviceFeePercent'],
        "fullTournament" => $obj['hasMaxPlayers'],
        "tournamentPublished" => $obj['isPublished']
    ),
    "teamInfo" => array(
        "tournamentType" => $obj['type'],
        "teamSize" => $obj['playersPerTeam'],
    ),
    "unixTimeStamps" => array(
        "startTime" => strtotime($obj['startTime']),
        "registrationOpen" => strtotime($obj['checkInStartTime']),
        "registrationEnds" => strtotime($obj['checkInStartTime']) + ((int)$obj['checkInStarts'])*60,
        "lastCompletedMatchAt" => strtotime($obj['lastCompletedMatchAt']),
        "createdAt" => strtotime($obj['createdAt']),
        "updatedAt" => strtotime($obj['updatedAt'])
    ),
    "contact" => array(
        "type" => $obj['contact']['type'],
        "details" => $obj['contact']['details']),
    "other" => array(
        "bannerUrl" => $obj['bannerUrl']
    ),
    "devInfo" => array(
        "tournamentID" => $obj['_id'],
        "organizationID" => $obj['organizationID'],
        "gameID" => $obj['gameID'],
        "bracketFlags" => $obj['countryFlagsOnBrackets'],
        "stageIDs" => $obj['stageIDs']
    ),
    "htmlInfo" => array(
        "prize" => $obj['prizes'],
        "rules" => array(
            "generalInfo" => $obj['rules']['critical'],
            "advancedInfo" => $obj['rules']['complete']
        ),
        "contactInfo" => $obj['contactDetails']
    ),
);

$output = json_encode($myarray);

echo $output;