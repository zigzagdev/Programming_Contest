
kes = gets.to_i
moriyama = gets.split.map(&:to_i)

fuji = []
(moriyama.length).times do  |i|
  if i%2 == 0
    fuji.push(moriyama[i])
  else
    fuji.unshift(moriyama[i])
  end
end

if (moriyama.length) %2 == 1
  fuji.reverse!
end
puts fuji.join(" ")