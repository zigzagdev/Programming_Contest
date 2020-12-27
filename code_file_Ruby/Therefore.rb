n = gets.to_i % 10

case n
when 2, 4, 5, 7, 9 then
  puts 'hon'
when 0, 1, 6, 8 then
  puts 'pon'
when 3 then
  puts 'bon'
end
