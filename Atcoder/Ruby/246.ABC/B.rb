mori, yama = gets.split(" ").map(&:to_i)
kes = mori**2 + yama**2

fuji = Math.sqrt(kes)

mori = mori/fuji
yama = yama/fuji

puts [mori, yama].join(" ")
