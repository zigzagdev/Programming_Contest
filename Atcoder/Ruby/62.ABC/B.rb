evis,jap = gets.split(" ").map &:to_i

puts "#" * (jap + 2)
evis.times do
  puts "##{gets.chomp}#"
end
puts "#" * (jap + 2)
