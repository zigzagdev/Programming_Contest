require 'prime'
takahiro = gets.to_i

if  Prime.prime?(takahiro)
  puts takahiro
  exit
else
  until Prime.prime?(takahiro)
    takahiro += 1
  end
end
p takahiro
