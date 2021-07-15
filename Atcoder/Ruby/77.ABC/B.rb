kes = gets.to_i

for i in 1..1000000000 do
  if(i*i>kes)
    break;
  end
end
if(i*i == kes)
  puts i
else
  puts (i-1)*(i-1)
end  
