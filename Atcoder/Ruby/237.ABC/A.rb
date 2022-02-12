mori = gets.to_i

if (2**31 > mori && -2**31<=mori)
  puts 'Yes'
else
  puts 'No'
end
