kes = gets.to_i

fuji = 0
kes+1.times do
  fuji = 2 ** kes
end

mori = kes ** 2

if fuji > mori
  puts 'Yes'
else
  puts 'No'
end