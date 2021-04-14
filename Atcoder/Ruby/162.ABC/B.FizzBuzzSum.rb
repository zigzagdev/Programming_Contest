n=gets.to_i

count=0
for i in (0..n) do
  if(i%15==0 || i%3==0 || i%5==0)
    count += 0
  else
    count +=i
  end
end
puts count
