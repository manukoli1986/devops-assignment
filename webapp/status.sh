#!/bin/env bash
while [ true ]; do
 sleep 5

> status.txt
echo "=================== Container usage report =================="  >> status.txt
echo "======================== $(date +%F) ====================="  >> status.txt

docker stats --no-stream --format "table {{.MemPerc}}\t{{.CPUPerc}}\t{{.MemUsage}}\t{{.Name}}"  >> status.txt
done
