fuji,kes = gets.split(" ").map &:to_i

moriyama = Array.new(fuji,0)

kes.times do
  evis,jap =  gets.split(" ").map &:to_i
  moriyama[evis-1] +=1
  moriyama[jap-1] +=1
end
puts moriyama 
