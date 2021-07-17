kes = gets.to_i
moriyama = gets.split(" ").map &:to_i

fuji = 0
for i in 1..kes-1
  if moriyama[i] < moriyama[i-1]
    fuji += moriyama[i-1] - moriyama[i]
    moriyama[i] = moriyama[i-1]
  else
    fuji +=0
  end
end
puts fuji 
