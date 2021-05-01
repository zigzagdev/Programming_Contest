x=gets.to_i

sum=100
year=0

while(sum<x)
  sum =(sum*101/100).floor
  year+= 1
end
puts year
