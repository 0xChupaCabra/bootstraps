~/kfx/kfx-cli stop
sleep 60
cd ~/.kfx/ && tar zcvf /var/www/html/coins/kfx/kfx.tar.gz blocks/ chainstate/ sporks/ peers.dat
rm /var/www/html/coins/kfx/kfx.zip && cd ~/.kfx/ && zip -r /var/www/html/coins/kfx/kfx.zip blocks/ chainstate/ sporks/ peers.dat
~/kfx/kfxd
sleep 5
