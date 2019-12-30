<?php


$command = readline();

$followersLikesComm = [];
// $followersLikesComm[$username][0] - index 0 is likes count
// $followersLikesComm[$username][1] - index 1 is comments count

while($command != "Log out")
{
    $cmds = explode(': ', $command);
    $mainCmd = $cmds[0];
    $username = $cmds[1];

    switch ($mainCmd)
    {
        case "New follower":
            if(!key_exists($username, $followersLikesComm))
            {
                $followersLikesComm[$username] = [0,0];
                // $followersLikesComm[$username][0] - index 0 is likes count
                // $followersLikesComm[$username][1] - index 1 is comments count
            }
            break;
        case "Like":
            $count = $cmds[2];
            if(!key_exists($username, $followersLikesComm))
            {
                $followersLikesComm[$username] = [$count,0];
            }
            else
            {
                $followersLikesComm[$username][0] += $count;
            }
            break;
        case "Comment":
            if(!key_exists($username, $followersLikesComm))
            {
                $followersLikesComm[$username] = [0,1];
            }
            else
            {
                $followersLikesComm[$username][1] += 1;
            }
            break;
        case "Blocked":
            if(!key_exists($username, $followersLikesComm))
            {
                echo "$username doesn't exist." . PHP_EOL;
            }
            else
            {
                unset($followersLikesComm[$username]);
            }
            break;
    }

    $command = readline();
}

$followersLikes = [];
$followersComments = [];

foreach ($followersLikesComm as $follower => $arr)
{
    $followersLikes[$follower] = $arr[0];
}

foreach ($followersLikesComm as $follower => $arr)
{
    $followersComments[$follower] = $arr[1];
}

ksort($followersLikes);
arsort($followersLikes);

$count = count($followersLikes);
echo $count . " followers" . PHP_EOL;

foreach ($followersLikes as $key => $val)
{
    echo $key . ": " . ($followersComments[$key] + $val) . PHP_EOL;
}

