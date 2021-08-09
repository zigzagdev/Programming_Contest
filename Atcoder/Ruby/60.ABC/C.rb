mori,yama = gets.split(" ").map &:to_i
kes = gets.split(" ").map &:to_i

if mori == 1
  p yama
  exit
end

evis = 0
for i in 0..mori-2
  if kes[i+1] > yama + kes[i]
    evis += yama
  elsif
  evis += kes[i+1] - kes[i]
  end
end
p evis + yama
