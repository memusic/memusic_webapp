## MeMusic.IO

First full Blockchain‑based music & streaming service

![alt text](https://raw.githubusercontent.com/memusic/memusic_webapp/main/img.png)



## Introduction
Laravel is a web application framework with an expressive, elegant syntax designed to make developing web apps easier and faster through built-in features. Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.

In our solution, we will be using blockchain technology to provide a robust decentralized music streaming platform for users.  Our mining idea is based on ChainFlex (X). We will probably use HyperLedger or Solana for our blockchain layer.
Moreover, our platform will support both centralized storage (e.g., AWS) and the IPFS. 
The MeMusic stack consists of the following:

PHP 7.x
MySQL 7.x
Apache2 Web Server
Bootstrap



## Using IPFS instead of Moden Cloud Storage for MeMusic?

Imagine that you share a piece of viral music with everybody in the office. The way the music would be retrieved today begins with everyone clicking on the link to the music. This then takes them to the website that the music is hosted on, and every single one of your coworkers’ computers has to individually reach out to the website’s server to download the music file. This situation puts massive pressure on the internet infrastructure (this is why we have slogans like the “Reddit hug of death” today!)
With IPFS, instead of a website’s server needing to transfer the music to every person who is trying to play it, IPFS can simply look for the music’s IPFS hash (which is the id for the content.) Note that this hash is based on what the content is, not where the content is. Instead of fetching that content from the website’s server, the browser will ask the IPFS network for the content corresponding to the IPFS hash it was just given, regardless of where it is stored.

Keeping with the above example, if everybody downloads the exact same music, they can now retrieve it from a peer within the office. Instead of each person retrieving that music from a server across the internet backbone, the first person to download the video could share it with everybody else in the office. Because your peers in the same building are expected able to deliver the music faster than the website’s server, you will fetch it from them without touching the internet backbone.


## PHP Extensions

php extension: cURL
php extension: MySQLi
php extension: mbstring
php extension: gd
php extension: ftp 

## Current Features

Payments: Paypal, Strip
Spotify
YouTube
Responsive
Waveform
AWS


## Demo 

![alt text](https://raw.githubusercontent.com/memusic/memusic_webapp/main/demo/img1.png)
![alt text](https://raw.githubusercontent.com/memusic/memusic_webapp/main/demo/img2.png)
![alt text](https://raw.githubusercontent.com/memusic/memusic_webapp/main/demo/img3.png)
![alt text](https://raw.githubusercontent.com/memusic/memusic_webapp/main/demo/img4.png)
![alt text](https://raw.githubusercontent.com/memusic/memusic_webapp/main/demo/img5.png)
![alt text](https://raw.githubusercontent.com/memusic/memusic_webapp/main/demo/img6.png)
![alt text](https://raw.githubusercontent.com/memusic/memusic_webapp/main/demo/img7.png)

