
kes,fuji = gets.split(" ").map &:to_i
moriyama = gets.split.map(&:to_i).sort

fuji.times do |i|
  moriyama.delete_at(-1)
end

p moriyama.sum

