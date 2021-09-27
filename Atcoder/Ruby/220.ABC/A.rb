moriyama,kes,fuji = gets.split(" ").map &:to_i

for i in(moriyama..kes)
  if i%fuji == 0
    puts i
    exit
  end
end

puts "-1"
