n=gets.to_i

if(n%111==0)
  puts n
else
  puts (n/111+1)*111
end
