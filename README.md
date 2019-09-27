## Requiem aeternam

Here lies the `/etc/motd.tail` which once sat DigitalOcean Droplet `jfprod`—IP address `159.203.83.89`—where this website for the longest time was hosted.

It was overwhelming, encouraging, taught me a ton, and was full of the detritus of mistakes and naïveté. Many things were too simple, others unnceccesarily complex. Everything ran as `root`.

```
-------------------------------------------------------------------------------------
Welcome to the Portfolio of Jacob Ford: Production Server
Whatever it is you a trying to learn how to do, you will become good at it.
-------------------------------------------------------------------------------------
To delete this message of the day: rm -rf /etc/motd.tail
```

Goodbye.

## Now

The app lives on Now now, on v1 which probably isn't long for this world.

See branch `now-v2` for a currently-broken attempt to update it for v2. The problem is that my PHP requires filesystem access to the image assets, as it does some scripting to detect their dimensions. But if I bundle my images with PHP it pushes way beyond Now's 50MB deployment maximum.
