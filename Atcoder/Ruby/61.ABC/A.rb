fuji,kes,moriyama = gets.split(" ").map &:to_i

if (moriyama >= fuji && kes >= moriyama)
  puts 'Yes'
else
  puts 'No'
end  
