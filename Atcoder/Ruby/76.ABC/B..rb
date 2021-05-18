n=gets.to_i
s=gets.to_i

result=1
n.times do
  if(result+s>=result*2)
    result = result*2
  else
    result = result+s
  end
end
puts result
