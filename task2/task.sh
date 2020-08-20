#!/bin/bash
sudo tcpdump -i any -nv src 127.0.0.1 and port 80 | grep 'username' --line-buffered >>hacker.txt 
