
walker = 0
12.times do
  if (gets.chomp.include?('r'))
    walker += 1
  end
end
puts walker
