docker build -t server .
docker run -itd -p 80:80 -p 3306:3306 -p 443:443 --name=server server:latest