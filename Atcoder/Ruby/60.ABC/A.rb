fuji,kes,moriyama = gets.split(" ").map &:to_s

if(fuji[-1] == kes[0] && kes[-1] == moriyama[0])
  puts "YES"
else
  puts "NO"
end
