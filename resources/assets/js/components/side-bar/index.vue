<template>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li><a href="/upload"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
            <li><a v-link="{ path: '/category/Movie' }"><span class="glyphicon glyphicon-film"></span> Reportage</a></li>
            <li><a v-link="{ path: '/category/Music' }"><span class="glyphicon glyphicon-headphones"></span> Muziek</a></li>
            <li><a v-link="{ path: '/category/Sport' }"><i class="fa fa-futbol-o" aria-hidden="true"></i> Sport</a></li>
            <li><a v-link="{ path: '/category/Games' }"><i class="fa fa-gamepad" aria-hidden="true"></i> Games</a></li>
            <li><a v-link="{ path: '/category/Other' }"><i class="fa fa-video-camera" aria-hidden="true"></i> overige</a></li>
            <li><a v-link="{ path: '/best' }"><i class="fa fa-line-chart" aria-hidden="true"></i> Alle Videos</a></li>
            
        </ul>
    </div>

</template>

<script>
</script>

<style>
    #wrapper {
        padding-left: 250px;
        padding-top: 50px;
        transition: all 0.4s ease 0s;
    }

    #sidebar-wrapper {
        margin-left: -250px;
        left: 250px;
        width: 250px;
        background: #212121;
        position: fixed;
        height: 100%;
        overflow-y: auto;
        z-index: 1000;
        transition: all 0.4s ease 0s;
    }

    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 250px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .sidebar-nav li {
        line-height: 40px;
        text-indent: 20px;
    }

    .sidebar-nav li a {
        color: #999999;
        display: block;
        text-decoration: none;
    }

    .sidebar-nav li a:hover {
        color: #fff;
        background: rgba(255,255,255,0.2);
        text-decoration: none;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }

    .sidebar-nav > .sidebar-brand a:hover {
        color: #fff;
        background: none;
    }

    @media (max-width:767px) {

        #wrapper {
            padding-left: 0;
        }

        #sidebar-wrapper {
            left: 0;
        }

        #wrapper.active {
            position: relative;
            left: 250px;
        }

        #wrapper.active #sidebar-wrapper {
            left: 250px;
            width: 250px;
            transition: all 0.4s ease 0s;
        }

    }
</style>
