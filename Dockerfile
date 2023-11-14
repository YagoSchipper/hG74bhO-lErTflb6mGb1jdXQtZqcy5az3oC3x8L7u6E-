FROM docker/whalesay:latest
LABEL Name=nulmetingphp Version=0.0.1
RUN apt-get -y update && apt-get install -y fortunes
CMD ["sh", "-c", "./src -a | cowsay"]
