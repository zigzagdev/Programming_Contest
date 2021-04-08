k=gets.to_i
s=gets.chomp

if s.size <= k
  puts t=s
else
  puts t=s[0,k]+"..."
end
