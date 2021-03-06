@extends('layouts.master')

@section('title', 'Team')

@section('content')
<div class="container">
    <div class="col-md-7 col-lg-5">
        <img src="/img/sunset.jpg" alt="Rhea and SpyTec" class="image-left"/>
    </div>
    <div class="col-md-5 col-lg-7">
        <div class="row team-member padding-bottom">
            <div class="profile">
                <img class="avatar" src="img/team-rhea.jpg" />
                <p class="labels">
                <span class="name">Rhea</span>
                <br />Project and Code Lead</p>
            </div>
            <p><i>
                Former Game Programmer, .NET Core Quality Engineering Lead & Community Manager, MountainBiker and an Evul Chick wearing her Red Hat, inspiring the desolate whitespace of Linux world with the delicate C# letters of simplified artificial intelligence.
            </i></p>
            <div class="icons spaced">
                <a href="http://rhea-ayase.eu"><img src="/img/external.png" alt="Rhea's website"></a>
                <a href="https://github.com/RheaAyase"><img src="/img/github.png" alt="github.com/RheaAyase"></a>
                <a href="https://twitter.com/RheaAyase"><img src="/img/twitter.png" alt="twitter.com/RheaAyase"></a>
                <a href="https://twitch.tv/RheaAyase"><img src="/img/twitch.png" alt="twitch.tv/RheaAyase"></a>
                <a href="https://youtube.com/RheaAyase"><img src="/img/youtube.png" alt="youtube.com/RheaAyase"></a>
                <a href="https://fedoraproject.org/wiki/User:Rhea"><img src="/img/fedora.png" alt="fedoraproject.org"></a>
            </div>
        </div>
        <div class="row team-member">
            <div class="profile">
                <img class="avatar" src="img/team-spytec.jpg" />
                <p class="labels">
                <span class="name">SpyTec</span>
                <br />WebDev Lead</p>
            </div>
            <p><i>
                Crafts websites. Also a professional slacker.
            </i></p>
            <div class="icons spaced">
                <a href="https://edassets.org"><img src="/img/external.png" alt="SpyTec's EDAssets website"></a>
                <a href="https://github.com/SpyTec"><img src="/img/github.png" alt="github.com/SpyTec"></a>
                <a href="https://twitter.com/SpyTec"><img src="/img/twitter.png" alt="twitter.com/SpyTec"></a>
            </div>
        </div>
    </div>
</div>
<section class="main-body blue">
    <section class="container team-table">
        <div class="row">
            <h1 class="cell">Dev Team</h1>
        </div>
        <div class="row container">
            <!-- freiheit -->
            <div class="col-md-6 team-member padding-bottom">
                <div class="profile">
                    <img class="avatar" src="img/team-freiheit.jpg" />
                    <p class="labels">
                    <span class="name">freiheit</span>
                    <br />Consultant</p>
                </div>
                <p><i>
                    He's just this guy, you know? And a Linux sysadmin.
                </i></p>
                <div class="icons spaced">
                    <a href="http://eric.eisenhart.com"><img src="/img/external.png" alt="freiheit's website"></a>
                    <a href="https://github.com/freiheit"><img src="/img/github.png" alt="github.com/freiheit"></a>
                    <a href="https://twitter.com/freiheit"><img src="/img/twitter.png" alt="twitter.com/freiheit"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <h1 class="cell">Support Team</h1>
        </div>
        <div class="row container">
            <!-- MasterChief -->
            <div class="col-md-6 team-member padding-bottom">
                <div class="profile">
                    <img class="avatar" src="img/team-masterchief.jpg" />
                    <p class="labels">
                    <span class="name">MasterChief_John-117</span>
                    <br />Support</p>
                </div>
                <p><i>
                    Programmer in study, also a weirdo.
                </i></p>
            </div>
            <!-- Alice -->
            <div class="col-md-6 team-member padding-bottom">
                <div class="profile">
                    <img class="avatar" src="img/team-alice.jpg" />
                    <p class="labels">
                    <span class="name">Alice</span>
                    <br />Support</p>
                </div>
                <p><i>
                    System admin and technology enthusiast, supports the religion of cookies.
                </i></p>
            </div>
            <div class="clearfix hidden-sm-down">
                <!-- endline -->
            </div>
            <!-- DokaDoka -->
            <div class="col-md-6 team-member padding-bottom">
                <div class="profile">
                    <img class="avatar" src="img/team-dokadoka.jpg" />
                    <p class="labels">
                    <span class="name">DokaDoka</span>
                    <br />Support</p>
                </div>
                <p><i>
                    Engineering student and valkyrja enthusiast, crafts all the emojis.
                </i></p>
            </div>
        </div>
    </section>
</section>
@endsection
