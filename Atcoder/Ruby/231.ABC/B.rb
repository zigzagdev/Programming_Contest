kes = gets.to_i
mori = []
kes.times do
  mori.push (gets.chomp)
end
yama = mori.tally.max { |a, b| a[1] <=> b[1] }

puts yama[0]
