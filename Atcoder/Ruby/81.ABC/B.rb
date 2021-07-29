kes = gets.to_i
fuji = gets.split(' ').map(&:to_i)

mori = 0

while fuji.all?(&:even?) do
  fuji = fuji.map{|i| i/2}
  mori += 1
end
p mori
