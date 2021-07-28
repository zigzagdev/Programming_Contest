kes = gets.to_i
mori = gets.split(" ").map &:to_i

yama = mori.sort
evisjap = yama.uniq

if (yama == evisjap)
  puts "YES"
else
  puts "NO"
end
