kes = gets.to_i
fuji = gets.chomp

mori = fuji.size
yama = fuji[0..mori/2-1]
moriyama = yama*2


if(kes%2 != 0)
  puts 'No'
  exit
elsif(moriyama != fuji)
  puts 'No'
  exit
end
puts 'Yes'

