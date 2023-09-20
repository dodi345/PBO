def print_board(board):
    for row in board:
        print(" | ".join(row))
        print("-" * 9)

def check_win(board, player):
    # Cek baris
    for row in board:
        if all(cell == player for cell in row):
            return True

    # Cek kolom
    for col in range(3):
        if all(board[row][col] == player for row in range(3)):
            return True

    # Cek diagonal utama
    if all(board[i][i] == player for i in range(3)):
        return True

    # Cek diagonal seondari
    if all(board[i][2 - i] == player for i in range(3)):
        return True

    return False

def is_board_full(board):
    return all(cell != " " for row in board for cell in row)

def main():
    board = [[" " for _ in range(3)] for _ in range(3)]
    current_player = "X"

    while True:
        print_board(board)
        row = int(input(f"Pemain {current_player}, masukkan baris (0, 1, 2): "))
        col = int(input(f"Pemain {current_player}, masukkan kolom (0, 1, 2): "))

        if board[row][col] != " ":
            print("Tempat ini sudah terisi. Coba lagi.")
            continue

        board[row][col] = current_player

        if check_win(board, current_player):
            print_board(board)
            print(f"Pemain {current_player} menang!")
            break
        elif is_board_full(board):
            print_board(board)
            print("Permainan berakhir dengan hasil seri!")
            break

        current_player = "O" if current_player == "X" else "X"

if __name__ == "__main__":
    main()
