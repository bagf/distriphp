<?php
namespace Distriphp\Network;

class TCPPeerPool
{
    protected $peers = [];
    protected $peersIdle = [];
    protected $dbseed;
    protected $secret;

    public static function listen($dbseed, $secret)
    {
        
    }
}
