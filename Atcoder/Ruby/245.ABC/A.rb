mori, yama, evis, jap  = gets.split(" ").map &:to_i

if mori < evis
  puts 'Takahashi'
  exit
elsif mori == evis && yama <= jap
  puts 'Takahashi'
  exit
else
  puts 'Aoki'
end
