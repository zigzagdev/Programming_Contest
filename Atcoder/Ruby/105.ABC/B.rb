kes = gets.to_i

for mori in 0..25 do
  for yama in 0..15 do
    if  mori*4 + yama*7 == kes
      puts 'Yes'
      exit
    end
  end
end
puts 'No'
